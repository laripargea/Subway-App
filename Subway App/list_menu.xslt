<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html lang="de">
    <head>
      <title>Subway Menu</title>
      <link rel="stylesheet" type="text/css" href="format.css"/>
    </head>
    <body>
      <h1>Menü</h1>
      <table>
        <tr>
          <th>Name</th>
          <th>Länge</th>
          <th>Brot</th>
          <th>Fleisch</th>
          <th>Käse</th>
          <th>Salat</th>
          <th>Soße</th>
          <th>Bild</th>
          <th>Allergene</th>
          <th>Preis</th>
        </tr>
        <xsl:for-each select="menu/sandwich">
          <tr>
            <td class="green"><xsl:value-of select="name"/></td>
            <td class="no"><xsl:value-of select="length"/></td>
            <td class="green"><xsl:value-of select="bread"/></td>
            <td class="yellow"><xsl:value-of select="meat"/></td>
            <td class="green"><xsl:value-of select="cheese"/></td>
            <td class="no"><xsl:value-of select="salad"/></td>
            <td class="green"><xsl:value-of select="sauce"/></td>
            <td class="yellow"><img><xsl:attribute name="src"><xsl:value-of select="picture"/></xsl:attribute></img></td>
            <td class="green"><a target="_blank"><xsl:attribute name="href"><xsl:value-of select="allergens"/></xsl:attribute>Link zu der Liste</a></td>
            <td class="no"><xsl:value-of select="price"/></td>
          </tr>
        </xsl:for-each>
      </table>
    </body>
  </html>
</xsl:template>
</xsl:stylesheet>