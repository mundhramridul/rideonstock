<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body background="bg2.jpg">
    <h2 align="center"><font color="red">About Us</font></h2>
	<div align="center"><xsl:value-of select="aboutus/vision"/></div>
	<div align="center">
	<table border="1">
      <tr bgcolor="#b6c10b">
        <th>FEATURES BEFORE</th>
		<th>FEATURES NEW</th>
      </tr>
      <xsl:for-each select="aboutus/feature">
      <tr>
        <td><xsl:value-of select="phase"/></td>
		 <td><xsl:value-of select="phase1"/></td>
      </tr>
      </xsl:for-each>
    </table>
	</div>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>