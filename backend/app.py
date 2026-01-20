import os
os.environ['TF_CPP_MIN_LOG_LEVEL'] = '2'  # hide warnings

from flask import Flask, request, jsonify
from flask_cors import CORS
import tensorflow as tf
import numpy as np
from PIL import Image
import json

app = Flask(__name__)
CORS(app)

# Load model once
print("Loading model, please wait...")
model = tf.keras.models.load_model("model.h5")
print("Model loaded!")

# Load labels
with open("labels.json", "r") as f:
    labels = json.load(f)

# Solutions for all diseases
solutions = {

    "Apple___Apple_scab":
    "Remove and destroy infected leaves. Apply fungicides like captan or mancozeb during early spring. Ensure proper air circulation.",

    "Apple___Black_rot":
    "Prune infected branches and remove mummified fruits. Apply copper-based fungicides and maintain orchard sanitation.",

    "Apple___Cedar_apple_rust":
    "Remove nearby cedar trees if possible. Use fungicides such as myclobutanil or propiconazole during early growth.",

    "Apple___Healthy":
    "Your plant is healthy. Continue proper watering, fertilization, and regular monitoring.",

    "Blueberry___Healthy":
    "Plant is healthy. Maintain acidic soil and proper irrigation.",

    "Cherry_(including_sour)___Powdery_mildew":
    "Apply sulfur or potassium bicarbonate fungicides. Ensure good airflow and avoid overhead watering.",

    "Cherry_(including_sour)___Healthy":
    "Healthy plant. Continue regular care and pruning.",

    "Corn_(maize)___Cercospora_leaf_spot Gray_leaf_spot":
    "Use resistant corn varieties. Apply fungicides like azoxystrobin if disease is severe. Practice crop rotation.",

    "Corn_(maize)___Common_rust":
    "Use rust-resistant hybrids. Apply fungicide if infection appears early and spreads rapidly.",

    "Corn_(maize)___Northern_Leaf_Blight":
    "Plant resistant varieties. Remove crop debris and apply fungicides when necessary.",

    "Corn_(maize)___Healthy":
    "Healthy crop. Maintain balanced fertilization and irrigation.",

    "Grape___Black_rot":
    "Remove infected leaves and fruits. Apply fungicides like mancozeb or ziram regularly.",

    "Grape___Esca_(Black_Measles)":
    "Prune infected vines and avoid pruning during wet conditions. No chemical cure—focus on vineyard hygiene.",

    "Grape___Leaf_blight_(Isariopsis_Leaf_Spot)":
    "Apply copper fungicides and remove infected plant material.",

    "Grape___Healthy":
    "Healthy grapevine. Continue monitoring and pruning.",

    "Orange___Haunglongbing_(Citrus_greening)":
    "Remove infected trees immediately. Control psyllid insects using approved insecticides. No known cure.",

    "Peach___Bacterial_spot":
    "Apply copper-based sprays during dormancy. Avoid overhead irrigation and prune infected branches.",

    "Peach___Healthy":
    "Plant is healthy. Maintain proper nutrition and pruning.",

    "Pepper,_bell___Bacterial_spot":
    "Use disease-free seeds. Apply copper sprays and avoid working with wet plants.",

    "Pepper,_bell___Healthy":
    "Healthy plant. Continue balanced watering and fertilization.",

    "Potato___Early_blight":
    "Apply fungicides like chlorothalonil. Remove infected leaves and practice crop rotation.",

    "Potato___Late_blight":
    "Destroy infected plants immediately. Apply fungicides containing metalaxyl or mancozeb.",

    "Potato___Healthy":
    "Healthy crop. Maintain good soil drainage and spacing.",

    "Raspberry___Healthy":
    "Healthy plant. Regular pruning and pest monitoring recommended.",

    "Soybean___Healthy":
    "Crop is healthy. Maintain soil fertility and irrigation.",

    "Squash___Powdery_mildew":
    "Apply sulfur-based fungicides. Ensure proper sunlight and air circulation.",

    "Strawberry___Leaf_scorch":
    "Remove infected leaves. Apply fungicides and avoid excessive nitrogen fertilization.",

    "Strawberry___Healthy":
    "Healthy plant. Continue proper watering and mulching.",

    "Tomato___Bacterial_spot":
    "Use disease-free seeds. Apply copper sprays and remove infected plants.",

    "Tomato___Early_blight":
    "Remove affected leaves. Apply fungicides like chlorothalonil and mulch soil.",

    "Tomato___Late_blight":
    "Destroy infected plants immediately. Apply preventive fungicides.",

    "Tomato___Leaf_Mold":
    "Reduce humidity and improve ventilation. Apply fungicides if necessary.",

    "Tomato___Septoria_leaf_spot":
    "Remove infected leaves. Apply fungicides and avoid overhead watering.",

    "Tomato___Spider_mites Two-spotted_spider_mite":
    "Spray neem oil or insecticidal soap. Maintain plant hydration.",

    "Tomato___Target_Spot":
    "Remove infected leaves and apply appropriate fungicides.",

    "Tomato___Tomato_Yellow_Leaf_Curl_Virus":
    "Remove infected plants immediately. Control whiteflies using insecticides or nets.",

    "Tomato___Tomato_mosaic_virus":
    "Remove infected plants. Disinfect tools and avoid tobacco handling.",

    "Tomato___Healthy":
    "Healthy tomato plant. Continue good agricultural practices."
}

# Preprocess images
def preprocess(image):
    image = image.convert("RGB")
    image = image.resize((224, 224))
    image = np.array(image) / 255.0
    image = np.expand_dims(image, axis=0)
    return image

@app.route("/predict", methods=["POST"])
def predict():
    if "image" not in request.files:
        return jsonify({"error": "Image not provided"}), 400

    try:
        img = Image.open(request.files["image"])
        img = preprocess(img)

        pred = model.predict(img)
        index = int(np.argmax(pred))
        confidence = float(np.max(pred)) * 100

        disease = labels[str(index)]
        solution = solutions[disease]

        return jsonify({
            "disease": disease,
            "confidence": round(confidence, 2),
            "solution": solution
        })
    except Exception as e:
        return jsonify({"error": str(e)}), 500

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=5000, debug=False)

@app.route("/search_disease", methods=["GET"])
def search_disease():
    disease_name = request.args.get("name")

    if not disease_name:
        return jsonify({"error": "Disease name is required"}), 400

    # Case-insensitive search
    for disease, solution in solutions.items():
        if disease_name.lower() in disease.lower():
            return jsonify({
                "disease": disease,
                "reason": disease.replace("___", " - "),
                "solution": solution
            })

    return jsonify({"error": "Disease not found"}), 404
