<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<head>
   <style>
      td,th{
 border: 2px solid black;
 border-collapse:collapse;
 padding:15px;
 }
 table{
 margin:auto;}
 margin-top:50px;}
   </style>
</head>
<body style="font-family:Arial;font-size:12px;background-color:pink; color:black;">
     <h2 align="center">Catalog</h2>
   <table style="background-color:lightgreen; color:black; border-collapse:collapse; border:2px solid black;">
        <tr>
           <th>Title</th>
           <th>Artist</th>
           <th>Country</th>
           <th>Company</th>
           <th>Price</th>
           <th>Year</th>
        </tr>
<xsl:for-each select="collection/cd">
        <tr>
            <td><xsl:value-of select="Title"/></td>
            <td><xsl:value-of select="Artist"/></td>
            <td><xsl:value-of select="Country"/></td>
            <td><xsl:value-of select="Company"/></td>
            <td><xsl:value-of select="Price"/></td>
            <td><xsl:value-of select="Year"/></td>
        </tr>
</xsl:for-each>
   </table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>