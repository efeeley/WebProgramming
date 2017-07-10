<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
xmlns = "http://www.w3.org/1999/xhtml">

<xsl:template match="/">
  <html>
  <body>
  <h2>Car Page XML</h2>
  <xsl:apply-templates/>
  </body>
  </html>
</xsl:template>

<xsl:template match="car">
  <p>
    <xsl:apply-templates select="make"/>  
    <xsl:apply-templates select="model"/>
	<xsl:apply-templates select="year"/>
	<xsl:apply-templates select="color"/>
	<xsl:apply-templates select="engine/number_of_cylinders"/>
	<xsl:apply-templates select="engine/fuel_system"/>
	<xsl:apply-templates select="number_of_doors"/>
	<xsl:apply-templates select="transmission_type"/>
	<xsl:apply-templates select="accessories/radio"/>
	<xsl:apply-templates select="accessories/air_conditioning"/>
	<xsl:apply-templates select="accessories/power_windows"/>
	<xsl:apply-templates select="accessories/power_steering"/>
	<xsl:apply-templates select="accessories/power_brakes"/>
  </p>
</xsl:template>

<xsl:template match="make">
  Make: <xsl:value-of select="."/>
  <br />
</xsl:template>

<xsl:template match="model">
  Model: <xsl:value-of select="."/>
  <br />
</xsl:template>

<xsl:template match="year">
  Year: <xsl:value-of select="."/>
  <br />
</xsl:template>

<xsl:template match="color">
  Color: <xsl:value-of select="."/>
  <br />
</xsl:template>

<xsl:template match="engine/number_of_cylinders">
  Number of Cylinders: <xsl:value-of select="."/>
  <br />
</xsl:template>

<xsl:template match="engine/fuel_system">
  Number of Cylinders: <xsl:value-of select="."/>
  <br />
</xsl:template>

<xsl:template match="number_of_doors">
  Number of Doors: <xsl:value-of select="."/>
  <br />
</xsl:template>

<xsl:template match="transmission_type">
  Transmission Type: <xsl:value-of select="."/>
  <br />
</xsl:template>

<xsl:template match="accessories/radio">
  Radio: <xsl:value-of select="."/>
  <br />
</xsl:template>

<xsl:template match="accessories/air_conditioning">
  Air Conditioning: <xsl:value-of select="."/>
  <br />
</xsl:template>
<xsl:template match="accessories/power_windows">
  Power Windows: <xsl:value-of select="."/>
  <br />
</xsl:template>
<xsl:template match="accessories/power_steering">
  Power Steering: <xsl:value-of select="."/>
  <br />
</xsl:template>
<xsl:template match="accessories/power_brakes">
  Power Brakes: <xsl:value-of select="."/>
  <br />
</xsl:template>

</xsl:stylesheet>