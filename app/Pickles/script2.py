import sys
import pickle
import os
import numpy as np 

class BernoulliNaiveBayes:
    def fit(self, X, y):
        self.classes = np.unique(y)
        self.prob = np.zeros((len(self.classes), X.shape[1]))
        self.prior = np.zeros(len(self.classes))
        
        for i, c in enumerate(self.classes):
            X_c = X[c == y]
            self.prob[i, :] = (X_c.sum(axis=0) + 1) / (X_c.shape[0] + 2)  # Add-one smoothing
            self.prior[i] = X_c.shape[0] / X.shape[0]

    def predict(self, X):
        posteriors = np.zeros((X.shape[0], len(self.classes)))

        for i, c in enumerate(self.classes):
            likelihood = self.prob[i, :] ** X * (1 - self.prob[i, :]) ** (1 - X)
            posteriors[:, i] = np.log(likelihood).sum(axis=1) + np.log(self.prior[i])
        
        return self.classes[np.argmax(posteriors, axis=1)]
        
# loading model
model_path = os.path.join(os.path.dirname(__file__), 'CKD_Model_v3.pkl')

with open(model_path, 'rb') as f:
    model = pickle.load(f)

# Preprocess binary categorical features
x = np.array([48, 80, 1.02, 1, 0, 1, 1, 0, 0, 121, 36, 1.2, 135, 4.8, 15.4, 44, 7800, 5.2, 1, 1, 0, 0, 0, 0])
x[3:] = (x[3:] > 0).astype(int)

# Load data and labels
X = np.load("X.npy")
y = np.load("y.npy")

# Fit BernoulliNaiveBayes model
model = BernoulliNaiveBayes()
model.fit(X, y)

# Predict class label for example data
pred = model.predict(x.reshape(1, -1))
print("Predicted class label:", pred[0])


# # Parse the input row of data
# input_data = [float(x) for x in sys.argv[1:25]]

# # Make a prediction based on the input data
# # prediction = model.predict([input_data])[0]
# prediction = model.predict(np.array([input_data]))[0]

# # Return the predicted outcome
# print(prediction)
