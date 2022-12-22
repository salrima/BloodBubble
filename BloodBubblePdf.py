from reportlab.pdfgen import canvas
from reportlab.lib.units import mm
from reportlab_qrcode import QRCodeImage

class BloodBubble:
    
   

    def __init__(self,Name,Date,QRcodeData):  
     self.my_path="C:/Users/Salrima Fernandes/Desktop/pdfs/Certificate34.pdf"
     self.img1="C:/Users/Salrima Fernandes/Desktop/pdfs/CERTIFICATE.jpeg"
     # "C:\Users\Salrima Fernandes\Desktop\pdfs\CERTIFICATE.jpeg"
     self.c=canvas.Canvas(self.my_path)
     self.c.setFont('Helvetica',20)
     self.c.drawImage(self.img1,0,-140,width=210*mm,preserveAspectRatio=True,mask='auto')
     self.lenth=len(Name)
     self.c.drawString((95-self.lenth)*mm,455,Name)
     self.lenth=len(Date)
     self.c.setFont('Helvetica',15)
     self.c.drawString((101-self.lenth)*mm,342,Date)
     self.qr=QRCodeImage(QRcodeData,size=50*mm)
     self.qr.drawOn(self.c,(91-self.lenth)*mm,100)
     self.c.showPage()
     self.c.save()


       


if __name__=='__main__':
     stringName="Salrima vas"
     stringDate="11/12/2002"
     QRcode="Renza Vas and Salrima"
     x=BloodBubble(stringName,stringDate,QRcode)