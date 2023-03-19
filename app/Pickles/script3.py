import pickle
import numpy as np;
import pandas as pd
import os
import sys

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
age = int(sys.argv[1])
bp = int(sys.argv[2])
sg = float(sys.argv[3])
al = int(sys.argv[4])
su = int(sys.argv[5])
rbc = sys.argv[6]
pc = sys.argv[7]
pcc = sys.argv[8]
ba = sys.argv[9]
bgr = int(sys.argv[10])
bu = int(sys.argv[11])
sc = float(sys.argv[12])
sod = int(sys.argv[13])
pot = float(sys.argv[14])
hemo = float(sys.argv[15])
pcv = int(sys.argv[16])
wc = int(sys.argv[17])
rc = float(sys.argv[18])
htn = sys.argv[19]
dm = sys.argv[20]
cad = sys.argv[21]
appet = sys.argv[22]
pe = sys.argv[23]
ane = sys.argv[24]

# Process the input using the loaded model
# X = np.array([[age, bp, sg, al, su, rbc, pc, pcc, ba, bgr, bu, sc, sod, pot, hemo, pcv, wc, rc, htn, dm, cad, appet, pe, ane]])
# X = np.array([[50, 80, 1.015, 0, 1, 1, 0, 0, 0,  219, 176, 13.8, 136, 4.5, 8.6, 24, 13200, 2.7, 1, 0, 0, 0, 1,1]])

X = pd.DataFrame([[age, bp, sg, al, su, rbc, pc, pcc, ba, bgr, bu, sc, sod, pot, hemo, pcv, wc, rc, htn, dm, cad, appet, pe, ane]])

# print(X)
y_pred = model.predict(X)

# Give output
print( y_pred[0])

