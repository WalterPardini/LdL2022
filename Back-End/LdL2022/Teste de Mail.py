from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart
import smtplib,ssl

email_address = 'labdeleng2022@gmail.com'
email_receiver = 'cdserra@alumnos.unsada.edu.ar'
message = 'Eureka, Babosos'

smtp_address = 'smtp.gmail.com'
smtp_port = 465

# on crée un e-mail
message = MIMEMultipart("alternative")
# on ajoute un sujet
message["Subject"] = "[DataScientest] e-mail essai"
# un émetteur
message["From"] = email_address
# un destinataire
message["To"] = email_receiver

# on crée un texte et sa version HTML
texte = '''
Bonjour 
Ma super newsletter
Cdt
mon_lien_incroyable
'''

html = '''
<html>
<body>
<h1>Bonjour</h1>
<p>Ma super newsletter</p>
<b>Cdt</b>
<br>
<a href="https://datascientest.com">mon_lien_incroyable</a>
</body>
</html>
'''

# on crée deux éléments MIMEText 
texte_mime = MIMEText(texte, 'plain')
html_mime = MIMEText(html, 'html')

# on attache ces deux éléments 
message.attach(texte_mime)
message.attach(html_mime)

email_address = 'labdeleng2022@gmail.com'
email_password = 'Unsada2022'

# on crée la connexion
context = ssl.create_default_context()
with smtplib.SMTP_SSL(smtp_address, smtp_port, context=context) as server:
  # connexion au compte
  server.login(email_address, "Unsada2022")
  # envoi du mail
  server.sendmail(email_address, email_receiver, message.as_string())