<?php echo "<a class=\"btn btn-warning\" href = \"../../../wapp-LHC-Bridge/lhc-extensions-bookmarks/output/bookmarks_list.php?user=$_SESSION[lhc_ezcAuth_id]\" target=_blank> Abrir Contatos </a>"; ?>
<?php echo "<a class=\"btn btn-success\" href = \"../../../wapp-LHC-Bridge/lhc-extensions-bookmarks/output/bookmarks_inits_add.php?user=$_SESSION[lhc_ezcAuth_id]\" target=_blank> Iniciar contato </a>"; ?>
<div class="p-1 border-top">
    <p class="float-right small"><a target="_blank" href="http://sa2.com.br">Sa2 &copy; <?php echo date('Y')?></a></p>
    <p class="small"><a href="<?php echo erLhcoreClassModelChatConfig::fetch('customer_site_url')->current_value?>"><?php echo htmlspecialchars(erLhcoreClassModelChatConfig::fetch('customer_company_name')->current_value)?></a></p>
</div>

<?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/page_footer_js.tpl.php'));?>
<?php include_once(erLhcoreClassDesign::designtpl('pagelayouts/parts/page_footer_js_extension_multiinclude.tpl.php'));?>
