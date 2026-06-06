from flask import Flask, render_template
import os

application = Flask(__name__)
application.debug = True

@application.route('/')
def index():
    return render_template('index.html')

@application.route('/about')
def about():
    return render_template('about.html')

if __name__ == "__main__":
    application.run(host="0.0.0.0", port=5050, debug=True)