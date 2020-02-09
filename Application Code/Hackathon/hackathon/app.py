import os
import datetime
from flask import Flask, render_template, url_for, redirect, session, escape, request, flash
from flask_sqlalchemy import SQLAlchemy
from flask_migrate import Migrate

app = Flask(__name__)

app.config['SECRET_KEY'] = 'mysecretkey'

basedir = os.path.abspath(os.path.dirname(__file__))
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///' + os.path.join(basedir, 'data.sqlite')
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False

db = SQLAlchemy(app)
Migrate(app,db)

class User(db.Model):

    __tablename__ = 'users'
    id = db.Column(db.Integer,primary_key = True)
    email = db.Column(db.Text)
    password = db.Column(db.Text)

    def __init__(self,email,password):
        self.email = email
        self.password = password

    def __repr__(self):
        return f"User name is : {self.email}"


class Event(db.Model):
    __tablename__ = 'events'
    id = db.Column(db.Integer,primary_key = True)
    event_name = db.Column(db.Text)
    organiser_name = db.Column(db.Text)
    date = db.Column(db.Text)
    desctiption = db.Column(db.Text)

    def __init__(self,event_name,organiser_name,date,desctiption):
        self.event_name=event_name
        self.organiser_name=organiser_name
        self.date=date
        self.desctiption=desctiption

    def __repr__(self):
        return f"Event name is : {self.event_name}"    

@app.route('/')
def index():
    return redirect(url_for('login'))

@app.route('/login', methods=['GET', 'POST'])
def login():
    error = None
    if request.method == 'POST' :
        email = request.form['email']
        password = request.form['password']
        user = User.query.filter_by(email=email).first()
        if not user :
            error = 'Not an User, Sign-up first'
            return render_template('login.html',error = error)

        elif email == user.email and password == user.password :
            session['email'] = email
            return redirect(url_for('admin')) 

        else:
            error = 'Invalid Credentials'
            return render_template('login.html',error = error)

    else :
        return render_template('login.html')


@app.route('/register',methods=['GET','POST'])
def register():
    error = None
    if request.method == 'POST' :
        email = request.form['email']
        password = request.form['password']
        user = User.query.filter_by(email=email).first()
        if not user :
            new_user = User(email,password)
            db.session.add(new_user)
            db.session.commit()
            return redirect(url_for('login'))

        else :
            error = 'User already Exists'
            return render_template('register.html',error=error)

    else :
        return render_template('register.html')        

@app.route('/admin')
def admin():
    if 'email' in session :
        email = session['email']
        user = User.query.filter_by(email=email).first()
        event_data = Event.query.all()
        return render_template('admin.html',event_data = event_data)

    else :    
        return render_template('login.html')      

@app.route('/delete', methods=['GET', 'POST'])
def delete():
    if request.method == 'POST':
        id = request.form['delete']
        event_del = Event.query.get(id)
        db.session.delete(event_del)
        db.session.commit()    

    return redirect(url_for('admin'))

@app.route('/add',methods=['GET','POST'])
def add():
    if request.method == 'POST' :
        event_name = request.form['event_name']
        organiser_name = request.form['organiser_name']
        date = request.form['date']
        description = request.form['description']
        new_event = Event(event_name,organiser_name,date,description)
        db.session.add(new_event)
        db.session.commit()

        return redirect(url_for('admin'))

    else:

        return render_template('add.html')


@app.route('/logout', methods=['GET', 'POST'])
def logout():

    if request.method == 'POST' :
        if 'email' in session :
            session.pop('email')
            return redirect(url_for('index'))



if __name__ == '__main__':
    app.run(debug=True)    