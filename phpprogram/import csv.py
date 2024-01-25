import csv
field_names=['No','Company','Model']
cars=[
    {'No':1,'Company':'Ferrari','Model':'488 GTB'},
    {'No':2,'Company':'Porsche','Model':'918 Spyder'},
    {'No':3,'Company':'Bugatti','Model':'La voiture Noire'},
]
with open('Cars.csv','w') as csvfile:
    writer=csv.DictWriter(csvfile,fieldnames=field_names)
    writer.writeheader()
    writer.writerows(cars)
with open('Cars.csv',newline="")
