a). Download the vsftpd-3.0.2 source code from the vsftpd website and sent the source code to the server.

b). copy privops.c into the source code and make the source code. Then copy the new vsftpd execute file into the /usr/sbin folder.

c). add “seccomp_sandbox=NO” in to the /etc/vsftpd.conf file.

d). restart the vsftpd service: sudo service vsftpd restart