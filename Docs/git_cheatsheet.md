Git cheatsheet


Git Global Config
	git config --global user.name <username>
	git config --global user.email <e-mail>

Checking branches
	git branch

Creating local branch
	git checkout -b <new_branch_name>

Staging files
  All files
	git add --all
	git add .
  Certain files
	git add <file_path>
Unstaging files
	git reset -- <file_path>
Reseting files to HEAD. Removes changes after HEAD
	git checkout @ -- <file_path> # Shortcut for HEAD.
	git checkout HEAD -- <file_path>

Commiting
	git commit -m 'Commit title'

Changing last commit name
	git commit --amend -m "New commit message."

Status and GUI review
	git status
	gitk --all

Merging
1.) We have commited changes in <branch_name>.
	git checkout master
	git fetch --all
	git pull
	git checkout <branch_name>
	git merge master
	git push
	git checkout master
	git merge <branch_name>
	git push

Pulling
	git fetch --all
	git pull

Pushing
	git push
Adding remote origin branch
	git push -u origin <branch_name>

Cherry-pick
	git cherry-pick <commit_ID>

Stash
	git stash
	git stash pop
	git stash apply