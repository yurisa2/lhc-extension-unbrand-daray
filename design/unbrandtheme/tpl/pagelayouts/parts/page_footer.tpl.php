<?php 

date_default_timezone_set('America/Sao_Paulo');
include '../wapp-LHC-Bridge/include/config.php';


if(isset($_SESSION[lhc_ezcAuth_id])) {
  
  echo "<div class=\"container\">
  <div class=\"row\">


";


  $status = json_decode(file_get_contents($ws_url_base.'/wapp-LHC-Bridge/wapp_status.php'));

echo "<div class=\"col-sm\">";

  if($status->online == 1) 
  // echo "<a class=\"btn btn-success\" href = \"../../../wapp-LHC-Bridge/lhc-extensions-bookmarks/output/bookmarks_list.php?user=$_SESSION[lhc_ezcAuth_id]\" target=_blank> $status->username Conectado! ".date('d/m/Y H:i:s',$status->time)."</a>";
  echo "<a class=\"btn btn-success\" href = \"../../../wapp-LHC-Bridge/lhc-extensions-bookmarks/output/bookmarks_list.php?user=$_SESSION[lhc_ezcAuth_id]\" target=_blank> $status->username Conectado! </a>";
  else
  echo "<a class=\"btn btn-danger\" href = \"../../../wapp-LHC-Bridge/lhc-extensions-bookmarks/output/bookmarks_list.php?user=$_SESSION[lhc_ezcAuth_id]\" target=_blank> $status->username DESCONECTADO! </a>";
  

  
echo "  </div>";
  
echo "
<div class=\"pull-right\">
<a class=\"btn btn-warning\" href = \"../../../wapp-LHC-Bridge/lhc-extensions-bookmarks/output/bookmarks_list.php?user=$_SESSION[lhc_ezcAuth_id]\" target=_blank> Abrir Contatos </a>
<a class=\"btn btn-success\" href = \"../../../wapp-LHC-Bridge/lhc-extensions-bookmarks/output/bookmarks_inits_add.php?user=$_SESSION[lhc_ezcAuth_id]\" target=_blank> Iniciar contato </a>

</div>

</div> <!-- div row -->
</div> <!-- div container -->

"; 


}

?>
<div class="p-1 border-top">
    <p class="float-right small"><a target="_blank" href="http://sa2.com.br">Sa2 &copy; <?php echo date('Y')?></a></p>
    <!-- <p class="small"><a href="<?php echo erLhcoreClassModelChatConfig::fetch('customer_site_url')->current_value?>"><?php // echo htmlspecialchars(erLhcoreClassModelChatConfig::fetch('customer_company_name')->current_value)?></a></p> -->
</div>

<?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/page_footer_js.tpl.php'));?>
<?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/page_footer_js_extension_multiinclude.tpl.php'));?>
