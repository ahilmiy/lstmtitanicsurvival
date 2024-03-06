from flask import Flask, request, jsonify
import numpy as np
from tensorflow.keras.models import model_from_json

app = Flask(__name__)

# Modeli JSON dosyasından yükle
with open("model.json", "r") as json_file:
    model_json = json_file.read()

model = model_from_json(model_json)

# Model ağırlıklarını yükle
model.load_weights("model_weights.h5")

@app.route('/predict', methods=['POST'])
def predict():
    # Gelen form verilerini al
    data = request.form.to_dict()

    # Giriş parametrelerini çıkar
    pclass = float(data['pclass'])
    sex = float(data['sex'])
    age = float(data['age'])
    sibsp = float(data['sibsp'])
    parch = float(data['parch'])
    fare = float(data['fare'])
    embarked = float(data['embarked'])

    # Giriş verilerini bir NumPy dizisine dönüştür
    input_data = np.array([[pclass, sex, age, sibsp, parch, fare, embarked]])

    # Modeli kullanarak tahmin yap
    prediction = model.predict(input_data)

    # Tahmini bir Python skalarına dönüştür
    prediction_value = prediction.item()

    # Tahmini JSON olarak döndür
    return jsonify({'Survival Rate': prediction_value})

if __name__ == '__main__':
    app.run(port=5000)
