from flask import Flask, request, jsonify
import pandas as pd
import numpy as np

app = Flask(__name__)

@app.route('/process-data', methods=['POST'])
def process_data():
    data = request.json
    df = pd.DataFrame(data)
    # Processar os dados
    result = df.describe()  # Exemplo de análise
    return jsonify(result.to_dict())

if __name__ == '__main__':
    app.run(debug=True)
