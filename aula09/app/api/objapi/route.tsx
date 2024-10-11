import { NextResponse} from "@/node_modules/next/server";

export function GET(res){
    res = [
        { nome: "Henrique"},
        { nome: "Barra"},
        { nome: "Isinha"}
    ];
    return NextResponse.json(
        {res},
        {status: 200}
    )
};