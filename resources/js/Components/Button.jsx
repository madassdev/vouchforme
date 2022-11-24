import React from "react";

function Button({
    type = "submit",
    processing = true,
    className = "",
    children,
    ...otherProps
}) {
    return (
        <button className={className} {...otherProps}>
            {processing ? "yo" : children}
        </button>
    );
}

export default Button;
