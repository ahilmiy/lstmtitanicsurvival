## Titanic Survival Prediction App

This is a simple web application that predicts the survival rate of passengers on the Titanic based on various input features such as passenger class, sex, age, number of siblings/spouses aboard, number of parents/children aboard, fare, and embarkation point.

### How to Use

1. **Run the Application**: Start the Flask server by running `app.py`.
   ```bash
   python app.py
Access the Prediction Form: Open your web browser and go to http://localhost:5000/.

Enter Passenger Details: Fill out the form with the following details:

Pclass: Passenger class (1st, 2nd, or 3rd).
Sex: Gender of the passenger (Male or Female).
Age: Age of the passenger.
SibSp: Number of siblings/spouses aboard.
Parch: Number of parents/children aboard.
Fare: Passenger fare.
Embarked: Port of embarkation (C = Cherbourg, Q = Queenstown, S = Southampton).
Predict Survival Rate: Click on the "Predict" button to submit the form and receive the predicted survival rate for the given passenger.

Files
app.py: Python script that serves the Flask web application. It loads a pre-trained LSTM model and provides an endpoint to make predictions.
model.json and model_weights.h5: Files containing the architecture and weights of the pre-trained LSTM model used for survival prediction.
index.php: HTML form that collects passenger details and sends them to the Flask server for prediction.
Technologies Used
Flask: Python web framework used for serving the web application and handling HTTP requests.
TensorFlow/Keras: Deep learning library used for loading and making predictions with the LSTM model.
HTML/CSS: Frontend technologies used for creating the prediction form.
Sample Usage
Open your web browser and go to http://localhost:5000/.
Fill out the form with appropriate passenger details.
Click on the "Predict" button.
The predicted survival rate for the given passenger will be displayed.
