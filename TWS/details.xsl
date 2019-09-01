<?xml version="1.0" encoding="UTF-8"?>

<xsl:transform version="1.0"

 xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>THE WATCH STORE - Transformation</title>

</head>

<body>

<table border="1">

<caption>THE WATCH STORE</caption>

<tr>

<th>MODEL</th><th>BRAND</th><th>PRICE</th>

</tr>

<xsl:for-each select="/studInfo/stud">

<tr>

<td><xsl:value-of select="MODEL"/></td>

<td><xsl:value-of select="BRAND"/></td>

<td><xsl:value-of select="PRICE"/></td>

</tr>

</xsl:for-each>

</table>

</body>   

 </html>    

</xsl:template>    

</xsl:transform>