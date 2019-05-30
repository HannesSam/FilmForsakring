# FilmForsakring

Hej detta är ett episkt projekt som för alltid kommer förändra sättet vi ser på film.

Hejdå IMDB there is a new sheriff in town!

Databasen ska se ut såhär
Databas:
filmforsakring

Table namn->users:
userID (AI, Primary key)
email
hash
salt
admin (boolean)

Table namn->reviews:
reviewID (AI, primary key)
userID (foreign key)
movieTitle
review
stars (string)
