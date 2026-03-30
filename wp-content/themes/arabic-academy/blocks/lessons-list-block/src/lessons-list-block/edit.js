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
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, SelectControl } from '@wordpress/components';
import { useSelect } from '@wordpress/data';


/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	const classes = useSelect((select) =>
		select('core').getEntityRecords('taxonomy', 'class', {
			'_fields': 'id,name',
			'per_page': 20,
		}
		), []);
	const branches = useSelect((select) =>
		select('core').getEntityRecords('taxonomy', 'branch', {
			'_fields': 'id,name',
			'per_page': 20,
		}
		), []);
	const versions = ['v1', 'v2', 'v3', 'v4'];
	const emptyOption = { label: '-', value: '' };


	const lessons = useSelect((select) => {
		const dumpList = [
			'Lesson 1',
			'Lesson 2',
			'Lesson 3'
		];

		if (!attributes.class || !attributes.branch) {
			return dumpList;
		}

		const list = select('core').getEntityRecords('postType', 'lesson', {
			'per_page': 20,
			'class': attributes.class,
			'branch': attributes.branch,
		})
		if (list && list.length > 0) {
			return list.map(l => l.title.rendered);
		} else {
			return dumpList;
		}
	}, [attributes.class, attributes.branch]);

	console.log(lessons);


	const blockProps = useBlockProps();


	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Settings', 'arabic-academy')}
				>
					<SelectControl
						label={__('Class', 'arabic-academy')}
						value={attributes.class}
						options={classes ? [emptyOption, ...classes.map(c => { return { label: c.name, value: c.id } })] : []}
						onChange={(value) => setAttributes({ class: value })}
					/>
					<SelectControl
						label={__('Branch', 'arabic-academy')}
						value={attributes.branch}
						options={branches ? [emptyOption, ...branches.map(b => { return { label: b.name, value: b.id } })] : []}
						onChange={(value) => setAttributes({ branch: value })}
					/>
					<SelectControl
						label={__('Version', 'arabic-academy')}
						value={attributes.version}
						options={versions.map(v => { return { label: v.toUpperCase(), value: v } })}
						onChange={(value) => setAttributes({ version: value })}
					/>
				</PanelBody>
			</InspectorControls>
			<div {...blockProps} className={blockProps.className + " " + attributes.version}>
				{lessons && lessons.map((l, i) =>
					<div className='container'>
						<div className='label'>
							<p>{i + 1}</p>
						</div>
						<div className='text'>
							<p>{l}</p>
						</div>
						<div className='trailing'>
							<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M5.83333 11.6667L0 5.83333L5.83333 0L6.86875 1.03542L2.07083 5.83333L6.86875 10.6313L5.83333 11.6667Z" fill="#00464A" />
							</svg>
						</div>
					</div>
				)}
			</div>
		</>
	);
}
