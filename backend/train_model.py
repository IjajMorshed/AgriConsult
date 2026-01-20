import tensorflow as tf
from tensorflow.keras.models import Sequential
from tensorflow.keras.layers import Conv2D, MaxPooling2D, Flatten, Dense
import numpy as np

# Create dummy dataset (100 random images, 4 classes)
X_train = np.random.rand(100,224,224,3)
y_train = tf.keras.utils.to_categorical(np.random.randint(4, size=(100,1)), num_classes=4)

# Build small CNN model
model = Sequential([
    Conv2D(16, (3,3), activation='relu', input_shape=(224,224,3)),
    MaxPooling2D(2,2),
    Conv2D(32, (3,3), activation='relu'),
    MaxPooling2D(2,2),
    Flatten(),
    Dense(64, activation='relu'),
    Dense(4, activation='softmax')
])

model.compile(optimizer='adam', loss='categorical_crossentropy', metrics=['accuracy'])

# Train model (2 epochs just to create file)
model.fit(X_train, y_train, epochs=2, batch_size=8)

# Save model
model.save("model.h5")
print("model.h5 created successfully!")
