# [FriendsOfPhp.org](https://www.friendsofphp.org)

[![Build Status](https://img.shields.io/travis/TomasVotruba/friendsofphp.org/master.svg?style=flat-square)](https://travis-ci.org/TomasVotruba/friendsofphp.org)

## Install

```sh
git clone your-fork.git
cd your-fork
npm install
```

### Update Data

```markdown
# imports groups from http://php.ug
bin/console php-ug-import

# based on groups, import meetups from https://meetup.com
bin/console import-meetups
```

## Run the website

Now all you gotta do it move to the directory and run the gulp (see [gulpfile.js](/gulpfile.js) for more details):

```sh
gulp
```

And open [http://localhost:8000](localhost:8000) in your browser.

That's all!

<!--
## Work Notes

do you want to add a meetup? let me know :)

no programming content, just link to existing contente! -> slack =)
brands


# how to spread?)

- go to meetup personally
- spread connections, come to visit us
- add train trips and a price, or a plane
- or place to sleep - přijeďte do prahy, ubytuju vás :) jít příkladem

- integrovat developeow?
- get a job, connect on meetup in another country
-->
