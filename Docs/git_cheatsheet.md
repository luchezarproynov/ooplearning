# Git cheatsheet


## Git Global Config
	git config --global user.name <username>
	git config --global user.email <e-mail>

## Checking branches. View branches list
	git branch

## Creating local branch
	git checkout -b <new_branch_name>

## Changing branch_name
1. We go to current branch.
`git checkout <old_name>`
2. We change the name of the branch.
`git branch -m <new_name>`
3. We upload the new branch_name to GitHub.
`git push origin -u <new_name>`
4. We delete the old branch_name from GitHub.
`git push origin --delete <old_name>`

## Delete a branch
	* delete branch locally
	`git branch -d localBranchName`

	* delete branch remotely
	`git push origin --delete remoteBranchName`
	
	* The -d option will delete the branch only if it has already been pushed and merged with the remote branch. Use -D instead if you want to force the branch to be deleted, even if it hasn't been pushed or merged yet.

## Staging files
* All files
`git add --all`
`git add .`
* Certain files
`git add <file_path>`
* Unstaging files
`git reset -- <file_path>`

## Reseting files to HEAD. Removes changes after HEAD
	git checkout @ -- <file_path> # Shortcut for HEAD.
	git checkout HEAD -- <file_path>

## Commiting with commit message
	git commit -m 'Commit title'

## Changing last commit name
	git commit --amend -m "New commit message."

## Git Status and GUI review. Commits statistics review.
	git status
	gitk --all

## Merging
1. We have commited changes in <branch_name>.
2. We go to branch master.
`git checkout master`
3. Updates commits graph from origin.
`git fetch --all`
4. We get all remote changes in master branch.
`git pull`
5. We go to current branch.
`git checkout <branch_name>`
6. Merge branch master into branch <branch_name>.
`git merge master`
7. We upload the new branch version to GitHub or GitLab etc.
`git push`
8. 2.)
`git checkout master`
9. Because we merged master into <branch_name>, we make fast forward now.
`git merge <branch_name>`
10. 7.) but we upload master branch.
`git push`

## Pulling
* Updates commits graph from origin.
`git fetch --all`
* We get all remote changes in current branch.
`git pull`

## Pushing
### Uploads all new commits for current branch.
* Adding remote origin branch and uploads current branch commits.
`git push -u origin <branch_name>`
* Only upload.
`git push`

## Cherry-pick
* Translates a commit from one branch to another.
`git cherry-pick <commit_ID>`

## Stash
* Saves current not commited changes into a buffer.
`git stash`
* Loads all stash changes into the current branch and deletes the changes from the buffer.
`git stash pop`
* Loads all stash changes into the current branch. Keeps the changes in the buffer.
`git stash apply`
* List of all stash changes.
`git stash list`