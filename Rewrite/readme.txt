��ѹ�ļ���C�̸�Ŀ¼��

��Ҫ����Rewrite��IISվ���Isapi��������ɸѡ��

ɸѡ������Rewrite

��ִ���ļ�ѡ�� c:\Rewrite\Rewrite.dll����������

httpd.ini�������ļ�
�������Ը���վ�㲻�������Ļ����������̳��supesite�Ƿֿ������������Ļ������Ϸ����ᵼ��˫���໥�������������������� �밴����ķ����Ķ�55tt686
RewriteCond Host: (.+)

RewriteCond Referer: (?!http://\1.*).*

RewriteRule .*\.(?:gif|jpg|png|) /block.gif [I,O]

����������ڶ��и�Ϊ��

RewriteCond Referer: (?!http://(?:www\.sanreal\.com|www\.discuz\.net)).+

��������������˼���ǳ���http://www.sanreal.com�Լ�www.discuz.net������վ�㣬��������վ�ϵ���ȫ���ܾ���

��������dz5�ľ�̬�����Ѿ�����, Ȼ������վ��Ŀ¼�½���block.gif�ļ� 

��������վ��ʾ�ľ������ͼƬ��

