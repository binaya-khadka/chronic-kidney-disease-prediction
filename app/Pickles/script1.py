import sys
import pickle
import os
import numpy as np 


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
    
# loading model
model_path = os.path.join(os.path.dirname(__file__), 'CKD_Model_v2.pkl')

with open(model_path, 'rb') as f:
    model = pickle.load(f)

# Parse the input row of data
input_data = [float(x) for x in sys.argv[1:25]]

# Make a prediction based on the input data
# prediction = model.predict([input_data])[0]
prediction = model.predict(np.array([input_data]))[0]

# Return the predicted outcome
print(prediction)
