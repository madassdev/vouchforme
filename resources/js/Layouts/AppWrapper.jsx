import { Link } from "@inertiajs/inertia-react";
import React from "react";

function AppWrapper({ children }) {
    return (
        <div>
            <div className="fixed top-0 left-0 right-0">
                <div className="w-full flex items-center justify-between h-12 px-12 bg-blue-800">
                    <div className="">
                        <p className="text-white font-bold">
                            Vouchfor<span className="text-yellow-400">Me</span>
                        </p>
                    </div>

                    <ul className="flex items-center space-x-4 text-white">
                        <li>
                            <Link href={route("index")} className="hover:text-yellow-400">
                                <span>Home</span>
                            </Link>
                        </li>
                        <li>
                            <Link href={route("auth.register")} className="hover:text-yellow-400">
                                <span>Register</span>
                            </Link>
                        </li>
                        <li>
                            <Link href={route("auth.login")} className="hover:text-yellow-400">
                                <span>Login</span>
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
            <div className="mt-12 px-5">{children}</div>
        </div>
    );
}

export default AppWrapper;
