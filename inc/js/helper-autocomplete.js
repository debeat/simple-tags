function formatItem(row) {
	return row[1];
}

function formatResult(row) {
	return row[1].replace(/(<.+?>)/gi, '');
}

function initjQueryAutoComplete( p_target, p_url, p_width ) {
	jQuery(document).ready(function () {
		jQuery( ""+p_target ).autocomplete( p_url, {
			width: p_width,
			multiple: true,
			matchContains: true,
			selectFirst: false,
			formatItem: formatItem,
			formatResult: formatResult
		});
	});
}