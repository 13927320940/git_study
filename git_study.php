1.pwd用来显示当前目录的

2.git init 把这个目录变成git可以管理的仓库

3.git add git study.txt 把文件添加到暂存区里，git add . 加个点，提交新文件(new)和被修改(modified)文件，不包括被删除(deleted)文件，git add -A，提交所有变化。git add前几条都可以记不住，这个必须记住！！！

5.git log 查看最近修改日志

6.git reset --hard HEAD^  这是返回上一个版本，要是上上个呢git reset --hard HEAD^^,要是前100个呢，git reset  --hard HEAD~100，通过git reset --hard 版本号,,,可以恢复到个版本里

7.cat git_study.php  查看内容

8.git reflog 查看提交日志的版本号，，

9.git checkout -- git_study.php    删除缓存区未提交的文件

10.ssh-keygen  -t rsa –C "13927320940"    创建本地电脑的id_rsa私钥  ，这是在自己电脑cmd里去运行的，不是git bash界面哦，引号里面是git账号

11.git push origin master    这是本地git commit之后就推送到仓库的语句，在第一次的时候要加-u,不管主分支还是新增的分支git push -u origin master

12.git checkout -b dev   用于创建并切换分支，dev就是分支名，-b参数是指创建

13.git branch dev   表示创建分支

14.git checkout dev  表示切换分支，，第12的操作，就相当于13，14的两步操作

15.git merge dev   表示合并此分支到主分支上

16.git branch -d dev   表示删除分支

17.通常合并分支时，git一般使用”Fast forward”模式，在这种模式下，删除分支后，会丢掉分支信息，现在我们来使用带参数 –no-ff来禁用”Fast forward”模式，即git merge --no-ff  -m “注释” dev

18.git branch -a（查看所有分支：本地分支白色，当前分支绿色，远程分支红色）

19.git pull（拉取最新的代码），，，git pull git_study，，指定拉某个仓库的代码

20.git push（已提交的变动推送至远程）

21.git push -f 推送到远端，git push 有可能会推送失败，所有需要强推；

22.要查看远程库的信息 使用 git remote  要查看远程库的详细信息 使用 git remote –v

23.clear 清屏    q  退出 

24.git clone git://git.kernel.org/pub/scm/git/git.git    克隆项目

25.删除远程分支  git push origin --delete dev

26.清除缓存区的文件 git rm --cached git_study.php



记录初始流程
1.打开需要作为git的文件夹，右键git bash打开命令行
2.git init 把这个目录变成git可以管理的仓库
3.git add .   将目录的文件上传到缓存区
4.git commit -m "提交日志"
5.复制github中的项目，找到ssh的代码，如：git remote add origin git@github.com:13927320940/project.git
6.运行git push -u origin master
