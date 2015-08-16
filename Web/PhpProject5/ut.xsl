<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body background="bg2.jpg">
    <h2 align="center"><font color="red">About</font></h2>
    
      <xsl:for-each select="catalog/ut">
	  <h2 align="center"><xsl:value-of select="title"/></h2>
        <p><xsl:value-of select="about"/></p>
      </xsl:for-each>
    
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>