/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { InnerBlocks, useBlockProps } from '@wordpress/block-editor';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @param {Object}   props               Properties passed to the function.
 * @param {Object}   props.attributes    Available block attributes.
 * @param {Function} props.setAttributes Function that updates individual attributes.
 *
 * @return {Element} Element to render.
 */
export default function Edit() {
	const blockProps = useBlockProps();
	const template = [
		['arabic-academy/mcq-option-block', {text: 'Option A', label: 'A'}],
		['arabic-academy/mcq-option-block', {text: 'Option B', label: 'B'}],
		['arabic-academy/mcq-option-block', {text: 'Option C', label: 'C'}],
		['arabic-academy/mcq-option-block', {text: 'Option D', label: 'D'}],
	];

	return (
		<div { ...blockProps }>
			<InnerBlocks
				allowedBlocks={ [ 'arabic-academy/mcq-option-block' ] }
				template={ template }
				templateLock='all'
			/>
		</div>
	);
}
