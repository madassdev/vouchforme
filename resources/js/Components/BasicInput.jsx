import React from "react";

function BasicInput({
    label,
    wrapperClassName,
    processing,
    type,
    error,
    ...inputProps
}) {
    return (
        <div className={`flex flex-col space-y-1 ${wrapperClassName}`}>
            <label htmlFor={label} className="capitalize">
                {label}
            </label>

            <input
                type={type || "text"}
                className="w-full rounded border border-gray-300 p-2 focus:outline-none"
                {...inputProps}
            />
            {processing || <p className="text-xs text-red-500">{error}</p>}
        </div>
    );
}

export default BasicInput;
