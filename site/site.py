from flask import Flask, render_template

app = Flask(__name__)


# Route - pi-univesp-g4/
# função - o que exibir

@app.route("/")
def dengue():
    return render_template("dengue.html")

@app.route("/formulario/")
def formulario():
    return render_template("formulario.html")


# coloca o site no ar
if __name__ == "__main__":
    app.run(debug = True)
