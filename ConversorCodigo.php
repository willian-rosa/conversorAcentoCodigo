<?php
class ConversorCodigo {
	
	private $texto;
	
	/**
	 * @param string $texto
	 */
	public function __construct($texto){
		$this->texto = $texto;
	}
	
	/**
	 * @param array $letras
	 * @param array $codigos
	 */
	private function replace(array $letras, array $codigos){
		return str_replace($letras, $codigos, $this->texto);
	}
	
	/**
	 * @return string
	 */
	public function converteHtml(){
		
		$letras = explode(',', 'Á,È,ô,Ç,á,è,Ò,ç,Â,Ë,ò,â,ë,Ø,Ñ,À,Ð,ø,ñ,à,ð,Õ,Å,õ,Ý,å,Í,Ö,ý,Ã,í,ö,ã,Î,",Ä,î,Ú,<,ä,Ì,ú,>,Æ,ì,Û,&,æ,Ï,û,ï,Ù,®,É,ù,©,é,Ó,Ü,Þ,Ê,ó,ü,þ,ê,Ô,ß');
		$codigosString = '&Aacute;,&Egrave;,&ocirc;,&Ccedil;,&aacute;,&egrave;,&Ograve;,&ccedil;,&Acirc;,&Euml;,&ograve;,&acirc;,';
		$codigosString.= '&euml;,&Oslash;,&Ntilde;,&Agrave;,&ETH;,&oslash;,&ntilde;,&agrave;,&eth;,&Otilde;,&Aring;,&otilde;,';
		$codigosString.= '&Yacute;,&aring;,&Iacute;,&Ouml;,&yacute;,&Atilde;,&iacute;,&ouml;,&atilde;,&Icirc;,&quot;,&Auml;,';
		$codigosString.= '&icirc;,&Uacute;,&lt;,&auml;,&Igrave;,&uacute;,&gt;,&AElig;,&igrave;,&Ucirc;,&amp;,&aelig;,&Iuml;,';
		$codigosString.= '&ucirc;,&iuml;,&Ugrave;,&reg;,&Eacute;,&ugrave;,&copy;,&eacute;,&Oacute;,&Uuml;,&THORN;,&Ecirc;,';
		$codigosString.= '&oacute;,&uuml;,&thorn;,&ecirc;,&Ocirc;,&szlig;';

		$codigos = explode(',', $codigosString);
		
		return $this->replace($letras, $codigos);
		
	}
	
	/**
	 * @return string
	 */
	public function converteJs(){
		
		$letras = explode(',', 'á,à,â,ã,ä,Á,À,Â,Ã,Ä,é,è,ê,ê,É,È,Ê,Ë,í,ì,î,ï,Í,Ì,Î,Ï,ó,ò,ô,õ,ö,Ó,Ò,Ô,Õ,Ö,ú,ù,û,ü,Ú,Ù,Û,ç,Ç,ñ,Ñ,&,\'');
		$codigosString = '\u00e1,\u00e0,\u00e2,\u00e3,\u00e4,\u00c1,\u00c0,\u00c2,\u00c3,\u00c4,\u00e9,\u00e8,\u00ea,\u00ea,\u00c9,';
		$codigosString.= '\u00c8,\u00ca,\u00cb,\u00ed,\u00ec,\u00ee,\u00ef,\u00cd,\u00cc,\u00ce,\u00cf,\u00f3,\u00f2,\u00f4,\u00f5,';
		$codigosString.= '\u00f6,\u00d3,\u00d2,\u00d4,\u00d\u00d6,\u00fa,\u00f9,\u00fb,\u00fc,\u00da,\u00d9,\u00db,\u00e7,\u00c7,';
		$codigosString.= '\u00f1,\u00d1,\u0026,\u0027';

		$codigos = explode(',', $codigosString);
		
		return $this->replace($letras, $codigos);
		
	}
	
	
}