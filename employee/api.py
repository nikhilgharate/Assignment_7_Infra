
from flask import Flask
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)

class employee(Resource):
    def get(self):
        return {
            'Employee': ['Nikhil', 'Krishan', 'Suraj', 'Sangarm']
        }

api.add_resource(employee, '/')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)
