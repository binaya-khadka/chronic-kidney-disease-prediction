import sys
import json
import pickle
from sklearn.preprocessing import LabelEncoder
from sklearn.linear_model import LinearRegression

# Load the saved model
try:
    with open('/C/Users/97798/CKD pred/CKD_model.pkl', 'rb') as f:
        model = pickle.load(f)
except Exception as e:
    print('Error loading the model:', e)
    sys.exit(1)



# Get the form data as a JSON string from the command line arguments
form_data = json.loads(sys.argv[1])
print(form_data)

# Extract the input values from the form data
Street = form_data['Street']
MSZoning = form_data['MSZoning']
LandSlope = form_data['LandSlope']
BldgType = form_data['BldgType']
RoofStyle = form_data['RoofStyle']
KitchenQual = form_data['KitchenQual']
SaleType = form_data['SaleType']
MSSubClass = form_data['MSSubClass']
LotArea = form_data['LotArea']
OverallQual = form_data['OverallQual']
OverallCond = form_data['OverallCond']
BedroomAbvGr = form_data['BedroomAbvGr']
TotRmsAbvGrd = form_data['TotRmsAbvGrd']



# Preprocess the input data as necessary
le = LabelEncoder()
categorical_columns = ['MSZoning', 'Street', 'LandSlope', 'BldgType','RoofStyle','KitchenQual','SaleType']
for column in categorical_columns:
    data[column] = le.fit_transform(data[column])

# Use the model to make predictions on the input data
prediction = model.predict([[MSZoning, Street,LandSlope,BldgType,RoofStyle,KitchenQual,SaleType,MSSubClass,LotArea,OverallQual,OverallCond,BedroomAbvGr,TotRmsAbvGrd]])

# Print the prediction to stdout (this will be captured by Node.js)
print(prediction[0])