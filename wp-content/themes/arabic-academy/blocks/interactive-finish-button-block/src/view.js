/**
 * WordPress dependencies
 */
import { store, getContext, getElement } from '@wordpress/interactivity';

const { state } = store('arabic-academy-test', {
	state: {
		active: false
	},
	actions: {
		setSelected() {
			const context = getContext();
			const { ref } = getElement();
			const value = ref.dataset.value;
			const lastValue = context.selected;
			if (lastValue >= 1) {
				Object.assign(context, {
					['isSelected' + lastValue]: false,
					['isSelected' + value]: true,
					selected: value,
				})
			} else {
				Object.assign(context, {
					['isSelected' + value]: true,
					selected: value,
				})
			}
			console.log(context);
		},
		finish() {
			state.active = true;
		},
	},
});
