### 1.0.1 February 26, 2022

- Fixed undefined variable issue with concatenating assignment operator being assigned to previously undeclared variable

- Fixed typos in penguin random house api url, causing error.
  - CAVEATS:
   - While I initially fixed the spelling mistakes, I was unable to receive a response from the penguin random house api (timed out). This was tested via cURL and Postman/Insomnia. I attempted to use the newer api found [here](https://developer.penguinrandomhouse.com/docs), however this api requires an api key. An api key has been requested but approval is still pending at the time of this writing. To meet the requirements of this assignment I used an equivalent api (open library) to complete the task. As it is written .the script will retrieve the first 5 authors and the first 5 works from each author with the last name 'Harkness' from the API.


### 1.0.0: February 19, 2022

- Created dev test!
- Wrote instructions in README.md
