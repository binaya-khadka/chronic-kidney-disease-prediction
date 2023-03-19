import pickle
import numpy as np
import pandas as pd
import os

def gaussian_pdf(x, mean, std):
    """Compute the probability density function of a Gaussian distribution"""
    exponent = np.exp(-((x - mean) ** 2) / (2 * std ** 2))
    return (1 / (np.sqrt(2 * np.pi) * std)) * exponent

class GaussianNaiveBayes:
    def fit(self, X, y):
        self.classes = np.unique(y)
        self.mean = np.zeros((len(self.classes), X.shape[1]))
        self.std = np.zeros((len(self.classes), X.shape[1]))
        self.prior = np.zeros(len(self.classes))
        
        for i, c in enumerate(self.classes):
            X_c = X[c == y]
            self.mean[i, :] = X_c.mean(axis=0)
            self.std[i, :] = X_c.std(axis=0)
            self.prior[i] = X_c.shape[0] / X.shape[0]

    def predict(self, X):
        posteriors = np.zeros((X.shape[0], len(self.classes)))

        for i, c in enumerate(self.classes):
            likelihood = gaussian_pdf(X, self.mean[i, :], self.std[i, :])
            posteriors[:, i] = np.log(likelihood).sum(axis=1) + np.log(self.prior[i])
        
        return self.classes[np.argmax(posteriors, axis=1)]


# Load the saved model from a pickle file
model_file_path = os.path.join(os.path.dirname(__file__), 'CKD_Model_v4.pkl')
with open(model_file_path, 'rb') as f:
    model = pickle.load(f)

# Take input from the user
# age = 48 #int(input("Enter Age: "))
# bp =  80 #int(input("Enter Blood Pressure: "))
# sg =  1.02 #float(input("Enter Specific Gravity (1.005,1.010,1.015,1.020,1.025): "))
# al =  1 #int(input("Enter Albumin (0,1,2,3,4,5): "))
# su =  0 #int(input("Enter Sugar (0,1,2,3,4,5): "))
# rbc =  1 #input("Enter Red Blood Cells (normal,abnormal): ")
# pc = 1 #input("Enter Pus Cell (normal,abnormal): ")
# pcc = 1 #input("Enter Pus Cell Clumps (present,notpresent): ")
# ba =  1 #input("Enter Bacteria (present,notpresent): ")
# bgr = 121 #int(input("Enter Blood Glucose Random: "))
# bu = 36 #int(input("Enter Blood Urea: "))
# sc = 1.2 #float(input("Enter Serum Creatinine: "))
# sod = 135 #int(input("Enter Sodium: "))
# pot = 4.8 #float(input("Enter Potassium: "))
# hemo = 15.4 #float(input("Enter Hemoglobin: "))
# pcv =  44 #int(input("Enter Packed Cell Volume: "))
# wc =  7800#int(input("Enter White Blood Cell Count: "))
# rc =  4.2 #float(input("Enter Red Blood Cell Count: "))
# htn = 1 #input("Enter Hypertension (yes,no): ")
# dm = 1#input("Enter Diabetes Mellitus (yes,no): ")
# cad = 1 #input("Enter Coronary Artery Disease (yes,no): ")
# appet = 1#input("Enter Appetite (good,poor): ")
# pe = 1#input("Enter Pedal Edema (yes,no): ")
# ane = 1#input("Enter Anemia (yes,no): ")

# age = 30
# bp = 80
# sg = 1.020
# al = 0
# su = 0
# rbc = 1
# pc = 1
# pcc = 0
# ba = 0
# bgr = 80
# bu = 25
# sc = 0.7
# sod = 140
# pot = 4.5
# hemo = 14.5
# pcv = 44
# wc = 7500
# rc = 5.2
# htn = 0
# dm = 0
# cad = 0
# appet = 0
# pe = 0
# ane = 0

# Process the input using the loaded model
# X = np.array([[age, bp, sg, al, su, rbc, pc, pcc, ba, bgr, bu, sc, sod, pot, hemo, pcv, wc, rc, htn, dm, cad, appet, pe, ane]])
# X = np.array([[50, 80, 1.015, 0, 1, 1, 0, 0, 0,  219, 176, 13.8, 136, 4.5, 8.6, 24, 13200, 2.7, 1, 0, 0, 0, 1,1]])

X = pd.DataFrame([[58.0,80.0,1.025,0.0,0.0,1,1,0,0,131.0,18.0,1.1,141.0,3.5,15.8,53.0,6800.0,6.1,0,0,0,0,0,0]])

# print(X)
y_pred = model.predict(X)

# Give output
print( y_pred[0])

