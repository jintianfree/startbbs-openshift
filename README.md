StartBBS-Openshift
================

StartBBS-Openshift

This is a simple BBS.

Now avalable on Openshift.



YouBBS，一个极其简单的BBS。

类似V2EX的风格。

这东西的脾气很有意思，当然，我的windows比这个东西脾气还大。。。给我造成了无尽的苦难。

我git使用的版本是最新的V1.04，以后会和作者同步更新。

YouBBS, a simple BBS programme with a style like V2EX(a famous BBS).

It keeps giving me trouble, well…………much less than troubles that my Windows gives me.

Anyway, I will keep updating this with the author.

在Openshift上部署过程：

1.建立一个程序

rhc app create -a （名字） -t php-5.3

2.建立数据库

rhc app cartridge add -a (名) -c mysql-5.1

把数据抄下来。

3.配置git，加入一个源

cd （名字）
git remote add upstream -m master git://github.com/superwbd/startbbs-openshift.git
git pull -s recursive -X theirs upstream master
（新版也是这么更新的）

4.push上去-

git push

点击主页，输入信息，完成安装。

1.create a application

rhc app create -a {name you want} -t php-5.3

2.create a database

rhc app cartridge add -a {name you want} -c mysql-5.1

!!!Write down all the information!!!!!

3.add a source of git

cd {name you want}
git remote add upstream -m master git://github.com/superwbd/startbbs-openshift.git
git pull -s recursive -X theirs upstream master
(same way if there exists any update…)

4.push it

git push

Click your address, enter the Mysql information to finish it.

 

可能的问题：（与软件实际无关）

执行 git push ，直接提示everything-up-to-date。

这时，本地执行：

git add .

git commit -m “随便敲点什么”

这样就可以git push 了。

Problem solving:

When you “git push”, it says “everything-up-to-date”.

You should:

git add .

git commit -m “Anything you like….”

Now you should be able to “git push”.
