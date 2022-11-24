import BasicInput from "@/Components/BasicInput";
import Button from "@/Components/Button";
import AppWrapper from "@/Layouts/AppWrapper";
import { useForm } from "@inertiajs/inertia-react";
import React from "react";

function Login() {
    const { data, setData, post, processing, errors } = useForm({
        email: "",
        password: "",
    });

    function handleSubmit(e) {
        e.preventDefault();
        console.log(data);

        post(route("auth.login.password"));
    }
    return (
        <AppWrapper>
            <div className="mt-24">
                <div className="bg-white w-5/6 mx-auto shadow flex min-h-[60vh]">
                    <div className="min-h-full w-1/2 bg-gradient-to-br from-yellow-400 to-orange-600"></div>
                    <div className="p-5 flex-1">
                        <p className="font-bold text-center">
                            Login to VouchforMe
                        </p>
                        <form className="my-8" onSubmit={handleSubmit}>
                            <div className="flex flex-col space-y-4">
                                <BasicInput
                                    wrapperClassName="w-full"
                                    type="email"
                                    name="email"
                                    label="email"
                                    placeholder="Enter email"
                                    value={data.email}
                                    onChange={(e) =>
                                        setData("email", e.target.value)
                                    }
                                    error={errors.email}
                                    required={true}
                                    processing={processing}
                                />
                                <BasicInput
                                    wrapperClassName="w-full"
                                    type="password"
                                    name="password"
                                    label="password"
                                    required={true}
                                    placeholder="Enter password"
                                    value={data.password}
                                    onChange={(e) =>
                                        setData("password", e.target.value)
                                    }
                                    error={errors.password}
                                    processing={processing}
                                />

                                <Button
                                    processing={processing}
                                    className="w-full bg-black text-white p-2 rounded"
                                >
                                    Login
                                </Button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </AppWrapper>
    );
}

export default Login;
