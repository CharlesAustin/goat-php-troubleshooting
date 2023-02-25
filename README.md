
# Get Authors' books from a public API

A demo project that grabs a list of authors from Random House Publishing with a
specific last name.

## Tech stack
| Tech | Minimum requirement |
|:--|:--|
| **PHP** | PHP 7.x |
| **CSS Frameworks** | Bootstrap 5.1
| **JS Frameworks** | JQuery 3.6
| **NPM** | npm 2.x

## Project information
| Info | URL
|:--|:--|
| **Random House API** | http://www.penguinrandomhouse.biz/webservices/rest/
| **Platform** | Display to terminal


## The assignment

Right now, this piece of code isn't working all that well, and is displaying
errors instead of a list of authors. Look at the `src/authorlist.php` file to
determine why this is the case, and make changes to remedy the problems.

Once that is complete, extend the code to provide a list of books for each
author.

Commit and push your changes into a private repository shared with `staticred` on Github,
and update the `CHANGELOG.md` to provide an explanation of what the issue was,
the steps you took to resolve it, and your thinking process for extending the
codebase.

## Helpful information

This codebase makes use of the Random House REST Services API, which is documented
here: http://www.penguinrandomhouse.biz/webservices/rest/. We are looking for
book titles written by a specific author.

There is a newer version of the Random House REST API available that you can
migrate this codebase to if desired.

The API can return either XML or JSON data.

Bonus points for finding a better way to do this. 😀

