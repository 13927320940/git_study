1.pwd用来显示当前目录的

2.git init 把这个目录变成git可以管理的仓库

3.git add git study.txt 把文件添加到暂存区里

4.git commit git study.txt 提交文件

5.git log 查看最近修改日志

6.git reset --hard HEAD^  这是返回上一个版本，要是上上个呢git reset --hard HEAD^^,要是前100个呢，git reset  --hard HEAD~100

7.cat git_study.php  查看内容

8.git reflog 查看提交日志的版本号，，通过git reset --hard 版本号,,,可以恢复到个版本里

9.git checkout -- git_study.php    删除缓存区未提交的文件

10.ssh-keygen  -t rsa –C "980554584@qq.com"    创建本地电脑的id_rsa私钥  ，这是在自己电脑cmd里去运行的，不是git bash界面哦

