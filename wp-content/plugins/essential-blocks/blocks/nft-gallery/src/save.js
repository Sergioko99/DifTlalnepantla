const { BlockProps } = window.EBControls;
const save = ({ attributes }) => {
    const {
        blockId,
        settings,
        source,
        layout,
        displayImage,
        displayTitle,
        displayCreator,
        displayOwner,
        displayPrice,
        displayLastSale,
        displayButton,
        creatorLabel,
        ownerLabel,
        buttonText,
        showOwnerText,
        showOwnerImage,
        gridPreset,
        listPreset,
        classHook,
    } = attributes;

    const dataAttributes = {
        settings,
        layout,
        displayImage,
        displayTitle,
        displayCreator,
        displayOwner,
        displayPrice,
        displayLastSale,
        displayButton,
        creatorLabel,
        ownerLabel,
        buttonText,
        showOwnerText,
        showOwnerImage,
        gridPreset,
        listPreset,
    };

    return (
        <BlockProps.Save attributes={attributes}>
            <div className={`eb-parent-wrapper eb-parent-${blockId} ${classHook}`}>
                <div
                    className={`eb-nft-gallery-wrapper ${blockId}`}
                    data-id={blockId}
                    data-source={source}
                    data-attributes={JSON.stringify(dataAttributes)}
                ></div>
            </div>
        </BlockProps.Save>
    );
};

export default save;
