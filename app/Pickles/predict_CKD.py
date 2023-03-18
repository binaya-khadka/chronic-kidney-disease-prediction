import sys
import pickle
import numpy as np # problem created 
import CKD_Model_v1;

def predict(input_str):
    with open("./CKD_Model_v1.pkl", "rb") as model_file:
        model = pickle.load(model_file)

    # Perform preprocessing on input_str if required
    # (e.g., tokenization, vectorization, etc.)

    prediction = model.predict([input_str])[0]
    return prediction

if _name_ == "_main_":
    input_str = sys.argv[1]
    prediction = predict(input_str)
    print(prediction)
