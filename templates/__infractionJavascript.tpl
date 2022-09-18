{if $__show->isActiveApplication() && MODULE_USER_INFRACTION}
	<script data-relocate="true" src="{@$__wcf->getPath()}js/WCF.Infraction{if !ENABLE_DEBUG_MODE}.min{/if}.js?v={@LAST_UPDATE_TIME}"></script>
	<script data-relocate="true">
		WCF.Language.addObject({
			'wcf.infraction.warn':			'{lang}wcf.infraction.warn{/lang}',
			'wcf.infraction.warn.success':	'{lang}wcf.infraction.warn.success{/lang}'
		});
		
		$(function() {
			{if $__wcf->session->getPermission('mod.infraction.warning.canWarn')}
				new WCF.Infraction.Warning.Content('com.uz.show.warnableEntry', '.jsWarnEntry');
			{/if}
		});
	</script>
{/if}