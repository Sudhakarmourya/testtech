
dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii
$ git clone https://github.com/akashverma0111/techsima.git
Cloning into 'techsima'...
remote: Enumerating objects: 125, done.
remote: Counting objects: 100% (125/125), done.
remote: Compressing objects: 100% (94/94), done.
remote: Total 125 (delta 12), reused 116 (delta 10), pack-reused 0
Receiving objects: 100% (125/125), 75.09 KiB | 680.00 KiB/s, done.
Resolving deltas: 100% (12/12), done.

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii
$ cd techsima

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (master)
$ git branch sudhakar

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (master)
$ git checkout sudhakar
Switched to branch 'sudhakar'

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (sudhakar)
$ git status
On branch sudhakar
Untracked files:
  (use "git add <file>..." to include in what will be committed)
        New Text Document.txt

nothing added to commit but untracked files present (use "git add" to track)

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (sudhakar)
$ git push
fatal: The current branch sudhakar has no upstream branch.
To push the current branch and set the remote as upstream, use

    git push --set-upstream origin sudhakar


dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (sudhakar)
$  git push --set-upstream origin sudhakar

Total 0 (delta 0), reused 0 (delta 0), pack-reused 0
remote:
remote: Create a pull request for 'sudhakar' on GitHub by visiting:
remote:      https://github.com/akashverma0111/techsima/pull/new/sudhakar
remote:
To https://github.com/akashverma0111/techsima.git
 * [new branch]      sudhakar -> sudhakar
Branch 'sudhakar' set up to track remote branch 'sudhakar' from 'origin'.

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (sudhakar)
$ git add .

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (sudhakar)
$ git commit -m 'sas'
[sudhakar 2b35565] sas
 1 file changed, 1 insertion(+)
 create mode 100644 New Text Document.txt

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (sudhakar)
$ git push
fatal: unable to access 'https://github.com/akashverma0111/techsima.git/': Could not resolve host: github.com

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (sudhakar)
$ git push origin sudhakar
fatal: unable to access 'https://github.com/akashverma0111/techsima.git/': Could not resolve host: github.com

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (sudhakar)
$  git push --set-upstream origin sudhakar
fatal: unable to access 'https://github.com/akashverma0111/techsima.git/': Could not resolve host: github.com

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (sudhakar)
$ git add .

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (sudhakar)
$ git commit -m 'sas'
On branch sudhakar
Your branch is ahead of 'origin/sudhakar' by 1 commit.
  (use "git push" to publish your local commits)

nothing to commit, working tree clean

dell@DESKTOP-3AJM8R9 MINGW64 ~/Desktop/dii/techsima (sudhakar)
$  git push
Enumerating objects: 4, done.
Counting objects: 100% (4/4), done.
Delta compression using up to 4 threads
Compressing objects: 100% (2/2), done.
Writing objects: 100% (3/3), 282 bytes | 282.00 KiB/s, done.
Total 3 (delta 1), reused 0 (delta 0), pack-reused 0
remote: Resolving deltas: 100% (1/1), completed with 1 local object.
To https://github.com/akashverma0111/techsima.git
   6fe4295..2b35565  sudhakar -> sudhakar
