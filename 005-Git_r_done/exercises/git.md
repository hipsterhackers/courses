mkdir shoppinglist

git init

git status

##### create a file

git status

git add file

git status

git commit -m ‘Adding shopping list’

git status

##### create files and a directory with files

git add ‘*.txt’

git commit -m ‘Add all the files’

git log


##### Add new file

git branch clean_up

git checkout clean_up

git rm 'junk-food-list.txt'

git commit -m "Remove all the unhealthy stuff”

git checkout master

git merge clean_up

git branch -d clean_up



### create a github account

git remote add origin https://github.com/try-git/try_git.git

git push


http://rogerdudler.github.io/git-guide/
http://git-scm.com/book/en/v2