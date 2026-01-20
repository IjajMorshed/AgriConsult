const imageInput = document.getElementById("imageInput");
const detectBtn = document.getElementById("detectBtn");
const resultDiv = document.getElementById("result");

function resizeImage(file, maxWidth, maxHeight, callback) {
    const img = new Image();
    const reader = new FileReader();

    reader.onload = e => img.src = e.target.result;

    img.onload = () => {
        const canvas = document.createElement("canvas");
        const ctx = canvas.getContext("2d");

        let width = img.width;
        let height = img.height;

        if (width > height) {
            if (width > maxWidth) { height *= maxWidth / width; width = maxWidth; }
        } else {
            if (height > maxHeight) { width *= maxHeight / height; height = maxHeight; }
        }

        canvas.width = width;
        canvas.height = height;
        ctx.drawImage(img, 0, 0, width, height);

        canvas.toBlob(callback, "image/jpeg", 0.8);
    };

    reader.readAsDataURL(file);
}

detectBtn.addEventListener("click", () => {
    if (!imageInput.files[0]) return alert("Please select an image first!");

    resizeImage(imageInput.files[0], 224, 224, blob => {
        const formData = new FormData();
        formData.append("image", blob, "leaf.jpg");

        resultDiv.innerHTML = "Predicting, please wait...";

        fetch("http://127.0.0.1:5000/predict", {
            method: "POST",
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.error) {
                resultDiv.innerHTML = "Error: " + data.error;
            } else {
                resultDiv.innerHTML = `
                    <b>Disease:</b> ${data.disease} <br>
                    <b>Confidence:</b> ${data.confidence}% <br>
                    <b>Solution:</b> ${data.solution}
                `;
            }
        })
        .catch(err => {
            resultDiv.innerHTML = "Server not running: " + err;
        });
    });
});



