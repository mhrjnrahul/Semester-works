<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:output method="html" indent="yes"/>

  <xsl:template match="/">
    <html>
      <head>
        <title>Student Information</title>
        <style>
          table { border-collapse: collapse; width: 60%; }
          th, td { border: 1px solid black; padding: 8px; text-align: left; }
          th { background-color: #f2f2f2; }
          .highlight { background-color: #d1ffd1; }
        </style>
      </head>
      <body>
        <h2>Student Details</h2>
        <table>
          <tr>
            <th>Name</th>
            <th>Roll Number</th>
            <th>Grade</th>
            <th>Address</th>
          </tr>
          <xsl:for-each select="students/student">
            <tr>
              <xsl:if test="grade = 'A'">
                <xsl:attribute name="class">highlight</xsl:attribute>
              </xsl:if>
              <td><xsl:value-of select="name"/></td>
              <td><xsl:value-of select="rollNumber"/></td>
              <td><xsl:value-of select="grade"/></td>
              <td><xsl:value-of select="address"/></td>
            </tr>
          </xsl:for-each>
        </table>
      </body>
    </html>
  </xsl:template>

</xsl:stylesheet>
