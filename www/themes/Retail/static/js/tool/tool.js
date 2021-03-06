var ToolPet = {

	/**
	 * Family linking.
	 */
	urlSlugs: {
		ferocity: '0',
		tenacity: '1',
		cunning: '2'
	},

	/**
	 * Calculator instance and config.
	 */
	calculator: null,
	loading: true,

	/**
	 * Pre-select the pet depending on the hash.
	 */
	initialize: function() {
		var hash = Core.getHash();

		if(ToolPet.urlSlugs[hash]) {
			ToolPet.openType(ToolPet.urlSlugs[hash]);
		} else {
			ToolPet.openBuild(hash);
		}

		window.onhashchange = function(e) {
			var hash = Core.getHash();

			if (ToolPet.urlSlugs[hash])
				ToolPet.openType(ToolPet.urlSlugs[hash]);
		}
	},

	/**
	 * Callback triggered from the calculator.
	 *
	 * @param calculator
	 */
	callback: function(calculator) {
		$('#pets .pet-family a').click(ToolPet.setFamily);
		
		ToolPet.calculator = calculator;
		ToolPet.calculator.enable();
		ToolPet.initialize();
	},

	/**
	 * Open up a build (usually based on hash tag).
	 *
	 * @param build
	 */
	openBuild: function(build) {
		if (build) {
			var id = TC_ENCODING.indexOf(build.charAt(0));
			$('#pet-'+ id).click();
		}
	},

	/**
	 * Open up a family tree based on ID.
	 *
	 * @param id
	 */
	openType: function(id) {
		var node = $('#family-'+ id);

		if (node.length) {
			node.find('a:first').click();
				ToolPet.loading = false;

				return;
			}
	},

	/**
	 * Set the current pet family.
	 */
	setFamily: function() {
		var node = $(this),
			id = node.data('id');
		
		$('#select-pet').hide();

		$('.pet-family')
			.removeClass('tree-active')
			.find('a').removeClass('tab-active');

		node.addClass('tab-active');
		node.parent().parent().addClass('tree-active');

		$('#calculator').removeClass('initial');

		ToolPet.calculator.setPetFamilyId(id, ToolPet.loading);
		ToolPet.loading = false;
	}

}

var ToolTalent = {

	/**
	 * Class linking.
	 */
	urlSlugs: {
		'death-knight': 6,
		'druid': 11,
		'hunter': 3,
		'mage': 8,
		'paladin': 2,
		'priest': 5,
		'rogue': 4,
		'shaman': 7,
		'warlock': 9,
		'warrior': 1
	},

	/**
	 * Whether to trigger during hash change event.
	 */
	hashChange: true,

	/**
	 * DOM objects.
	 */
	container: $('#calculator-container'),
	selector: $('#calculator-selector'),

	/**
	 * Calculator instances.
	 */
	calculators: {},

	/**
	 * Pre-select the class depending on the hash.
	 */
	initialize: function() {
		ToolTalent.selector.find('a').click(ToolTalent.loadCalculator);

		var hash = Core.getHash();

		if(ToolTalent.urlSlugs[hash]) {
			ToolTalent.openClass(ToolTalent.urlSlugs[hash]);
		} else {
			ToolTalent.openBuild(hash);
		}

		window.onhashchange = function(e) {
			var hash = Core.getHash();

			if (ToolTalent.urlSlugs[hash] && ToolTalent.hashChange)
				ToolTalent.openClass(ToolTalent.urlSlugs[hash]);
		}
	},

	/**
	 * Callback triggered from the calculator.
	 *
	 * @param calculator
	 */
	callback: function(calculator) {
		var id = ToolTalent.selector.find('a.tab-active').data('id');

		ToolTalent.calculators[id] = calculator;
	},

	/**
	 * Load the class calculator via AJAX.
	 */
	loadCalculator: function() {
		ToolTalent.hashChange = false;

		var node = $(this),
			id = node.data('id'),
			calculator = $('#talentcalc-'+ id);

		$('#calculator').removeClass('initial');
		$('#select-class').hide();

		ToolTalent.selector.find('a').removeClass('tab-active');
		node.addClass('tab-active');

		if (calculator.length) {
			ToolTalent.container.find('.talentcalc').hide();
			ToolTalent.hashChange = true;
			ToolTalent.calculators[id].exportBuild();

			calculator.show();
			return;
		}

		ToolTalent.container.addClass('loading');

		$.ajax({
			url: 'talent-calculator/'+ id,
			dataType: 'html',
			success: function(response) {
				ToolTalent.hashChange = true;
				ToolTalent.container
					.find('.talentcalc').hide().end()
					.append(response)
					.removeClass('loading');
			}
		});
	},

	/**
	 * Open up a build (usually based on hash tag).
	 *
	 * @param build
	 */
	openBuild: function(build) {
		if (build) {
			var id = TC_ENCODING.indexOf(build.charAt(0));
			ToolTalent.openClass(id);
		}
	},

	/**
	 * Open up a class pane.
	 *
	 * @param id
	 */
	openClass: function(id) {
		var node = $('#class-'+ id);

			if (id <= 11 && node.length) {
				node.click();
				return;
			}
		}

}        